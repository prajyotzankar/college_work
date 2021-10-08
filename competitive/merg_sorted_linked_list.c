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

int main(){

    struct node *head_1 = create_list();
    struct node *head_2 = create_list();

    print_list(head_1);
    print_list(head_2);

    selection_sort(head_1);
    selection_sort(head_2);

    print_list(head_1);
    print_list(head_2);

    struct node *curr_1 = head_1;
    struct node *curr_2 = head_2;
    struct node *next_1 = NULL;
    struct node *next_2 = NULL;
    struct node *prev_1 = NULL;
    struct node *prev_2 = NULL;

    while(curr_1 != NULL || curr_2 != NULL){

        next_2 = curr_2->next;
        next_1 = curr_1->next;
        if(curr_2->num <= curr_1->num){
            curr_2->next = curr_1;
            prev_1->next = curr_2;
        }
        else{
            
        }
    }

    return 0;
}