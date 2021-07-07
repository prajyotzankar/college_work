#include <stdbool.h>
#include <stdio.h>

unsigned int arr_sum(unsigned int arr[9]){
    unsigned int sum = 0;
    for(int i = 0 ; i < 9 ; i++)
        sum += arr[i];
    return sum;
}


bool validSolution(unsigned int board[9][9]){
  
    int i, j, sum;
  
    for(i = 0 ; i < 9 ; i++){
        for(j = 0 ; j < 9 ; j++){
            if(board[i][j] == 0)
            return false;
        }
    }
    
    
    for(i = 0 ; i < 9 ; i++){
        if((arr_sum(board[i]) != 45))
            return false;

        sum = 0;
        for(j = 0 ; j < 9 ; j++)
            sum += board[j][i];
        if(sum != 45)
            return false;
    }


       
    j = 0;

    while(j < 9){
        i = 0;
        while(i < 9){
            sum = 0;
            for(int row = i ; row < i + 3 ; row++){
                for(int col = j ; col < j + 3 ; col++){
                    sum += board[row][col];
                }
            }
            if(sum != 45)
                return false;
            i += 3;
        }
        j += 3;
    }

    return true;     
}

int main(){
    

    unsigned int example2[9][9] = {{5, 3, 4, 6, 7, 8, 9, 1, 2}, 
                              {6, 7, 2, 1, 9, 0, 3, 4, 8},
                              {1, 0, 0, 3, 4, 2, 5, 6, 0},
                              {8, 5, 9, 7, 6, 1, 0, 2, 0},
                              {4, 2, 6, 8, 5, 3, 7, 9, 1},
                              {7, 1, 3, 9, 2, 4, 8, 5, 6},
                              {9, 0, 1, 5, 3, 7, 2, 1, 4},
                              {2, 8, 7, 4, 1, 9, 6, 3, 5},
                              {3, 0, 0, 4, 8, 1, 1, 7, 9}};

    printf("%d \n" , validSolution(example2));

    return 0;

}


