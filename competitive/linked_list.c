#include <stdio.h>
#include <stdlib.h>

struct node{
    int num;
    struct node *next;
};

struct binary_node{
    int value;
    struct binary_node *left;
    struct binary_node *right;
};

struct node * create_list(){
    
    int no_of_nodes, i;

    printf("Enter the no of nodes to have in the list : ");
    scanf("%d", &no_of_nodes);
    struct node *head = malloc(sizeof(struct node));
    
    struct node *temp = head; 
    printf("Enter node values :");
    for(i = 0; i < no_of_nodes; i++){
        struct node *curr = malloc(sizeof(struct node));
        scanf("%d", &curr->num);
        if(i == 0)
            head = temp = curr;
        else{
            temp->next = curr;
            temp = curr;
        }
    }
    temp->next = NULL;
    return head;
}

void print_list(struct node *head){
    
    struct node *temp = head;
    while(temp != NULL){
        printf("%d \t", temp->num);
        temp = temp->next;
    }
    printf("\n");
}

void add_node(struct node *head){

    int position, value;
    printf("Enter the position to add new node at : ");
    scanf("%d", &position);

    printf("Enter the value of new node : ");
    scanf("%d", &value);

    struct node *temp = head;
    int i;
    for(i = 0 && temp->next != NULL; i < position - 2; i++)
        temp = temp->next;
    struct node *new_node = malloc(sizeof(struct node));
    new_node->next = temp->next;
    new_node->num = value;
    temp->next = new_node;

}

void delete_node(struct node *head){
    int position, i;
    struct node *temp = head;
    printf("Enter the node position to delete : ");
    scanf("%d", &position);

    for(i = 0; i < position - 2; i++){
        temp = temp->next;
    }
    temp->next = temp->next->next;
}

struct node *change_head(struct node *head, int choice){

    if(choice == 1){
        //add new node at head
        struct node *new_node = malloc(sizeof(struct node));

        printf("Enter the value of new head : ");
        scanf("%d", &new_node->num);

        new_node->next = head;
        return new_node;
    }
    else if(choice == 2){
        //delete the head
        return head->next;
    }
}

struct node *reverse_list(struct node *head){

    struct node *prev = NULL;
    struct node *curr = head;
    struct node *next = NULL;

    while(curr != NULL){
        next = curr->next;
        curr->next = prev;
        prev = curr;
        curr = next;
    }
    return prev;
}

struct node *middle_term(struct node *head){

    struct node *hare = head;
    struct node *tortoise = head;

    while(hare != NULL && hare->next != NULL){
        hare = hare->next->next;
        tortoise = tortoise->next;
    }
    printf("Middle term -> %d \n", tortoise->num);
}

struct node *selection_sort(struct node *head){

    struct node *node_to_compare = head;
    int temp;
    while(node_to_compare != NULL){
        struct node *curr = node_to_compare->next;
        struct node *min = node_to_compare;
        while(curr != NULL){
            if(curr->num < min->num)
                min = curr;
            curr = curr->next;
        }
        if(min != node_to_compare){
            temp = min->num;
            min->num = node_to_compare->num;
            node_to_compare->num = temp;
        }
        node_to_compare = node_to_compare->next;
    }
}

struct binary_node *new_bst_node(int data){
    struct binary_node *new_node = malloc(sizeof(struct binary_node));
    new_node->value = data;
    new_node->left = new_node->right = NULL;
    return new_node;
}

struct binary_node *insert_bst_node(struct binary_node *root, int data){
    if(root == NULL)
        return new_bst_node(data);
    else if(data < root->value)
        root->left = insert_bst_node(root->left, data);
    else
        root->right = insert_bst_node(root->right, data);
    return root;
}


struct binary_node *linked_list_to_bst(struct node *head){

    struct node *temp_node = head;
    struct binary_node *root = malloc(sizeof(struct binary_node));

    root = insert_bst_node(root, temp_node->num);
    temp_node = temp_node->next;

    while(temp_node != NULL){
        insert_bst_node(root, temp_node->num);
        temp_node = temp_node->next;
    }

    return root;
}

void print_bst_inorder(struct binary_node *root){
    if(root != NULL){
        print_bst_inorder(root->left);
        printf("%d \t", root->value);
        print_bst_inorder(root->right);
    }
}

int main(){
    
    int choice;
    struct node *head = create_list();
    print_list(head);

    printf("\n");
    printf("1 -> Add a node at a given position. \n");
    printf("2 -> Add new node at head \n");
    printf("3 -> Delete head \n");
    printf("4 -> Delete a node at a given position \n");
    printf("5 -> Reverse the linked list \n");
    printf("6 -> Find the middle term \n");
    printf("7 -> Selection Sort linked list \n");
    printf("8 -> Linked list to BST \n");
    printf("9 -> print the BST \n");
    printf("10 -> print the list \n");
    printf("0 -> Exit \n");

    printf("Enter yout choice : ");
    scanf("%d", &choice);

    while(choice){
        switch(choice){
            case 1  :   add_node(head);
                        print_list(head);
                        break;

            case 2  :   head = change_head(head, 1);
                        break;

            case 3  :   head = change_head(head, 2);
                        break;

            case 4  :   delete_node(head);
                        break;

            case 5  :   head = reverse_list(head);
                        break;

            case 6  :   middle_term(head);
                        break;
                        
            case 7  :   selection_sort(head);
                        break;

            case 8  :   print_bst_inorder(linked_list_to_bst(head));
                        break;

            case 10  :  print_list(head);
                        break;

            case 911 :   printf("\e[1;1H\e[2J");
                        break;

            case 0  : exit(1);
        }
        printf("Enter your choice : ");
        scanf("%d", &choice);
    }
    return 0;
}