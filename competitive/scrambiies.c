#include <stdbool.h>
#include <stdio.h>
#include <string.h>

bool scramble(const char *str1, const char *str2){
  
    int size_1 = strlen(str1) , size_2 = strlen(str2) , i , j;
    char str_1[size_1] , str_2[size_2] , temp, str_3[size_2];
    strcpy(str_1, str1);
    strcpy(str_2, str2);
    
    for(i = 0 ; i <= size_2 ; i++){
        for(j = 0 ; j <= size_1 ; j++){
            if(str_2[i] == str_1[j]){
                str_3[i] = str_1[j];
                str_1[j] = 1;
                break;
                printf("%d \n", 1);
            }
        }
    }
    if(!strcmp(str_2, str_3))
        return true;
    return false;
}

int main(){

    printf("%d \n", scramble("rkqodlw", "world"));
    return 0;
}
//printf("%c %c %c\n", str_1[j], str_2[i], str_3[i]);

/*
#include <stdbool.h>
#include <stdio.h>
#include <string.h>

bool scramble(const char *str1, const char *str2){
  
    int size_1 = strlen(str1) , size_2 = strlen(str2) , i , j;
    char str_1[size_1] , str_2[size_2] , temp;
    strcpy(str_1, str1);
    strcpy(str_2, str2);
    
    for (i = 0 ; i < size_1 - 1 ; i++){
        for (j = i+1 ; j < size_1 ; j++){
			if (str_1[i] > str_1[j]) {
					temp = str_1[i];
					str_1[i] = str_1[j];
					str_1[j] = temp;
			}
            
		}
    }

    for (i = 0 ; i < size_2 - 1 ; i++){
        for (j = i+1 ; j < size_2 ; j++){
			if (str_2[i] > str_2[j]) {
					temp = str_2[i];
					str_2[i] = str_2[j];
					str_2[j] = temp;
			}
		}
    }

    j = 0;
    i = 0;
    while(i <= size_2 && j <= size_1){
        if(str_2[i] == str_1[j]){
            j++;
            i++;
        }
        else 
            j++;
    }
    if(i > size_2)
        return true;
    return false;
}
*/