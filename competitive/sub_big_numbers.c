#include <stdlib.h>
#include <string.h>
#include <stdio.h>

char *sub(const char *a, const char *b){
    
    int size_1 = strlen(a);
    int size_2 = strlen(b);
    int carry = 0, counter_1, counter_2, counter_sum, size_sum, n, digit_1, digit_2;


    if(size_1 < size_2){
        size_2 = size_1;
        size_1 = strlen(b);
    }

    char *num_1 = malloc(size_1*sizeof(char));
    char *num_2 = malloc(size_2*sizeof(char));

    if(strlen(b) > strlen(a)){
        strcpy(num_1, b);
        strcpy(num_2, a);
    }
    else{
        strcpy(num_1, a);
        strcpy(num_2, b);
    }
    size_sum = size_1 + 1;
    counter_1 = size_1 - 1, counter_2 = size_2 - 1, counter_sum = size_sum - 2;

    
    char *sum = malloc(size_sum*sizeof(char));
    sum[size_sum] = '\0';
    
    while(counter_2 >= 0){
        digit_1 = num_1[counter_1]  - '0';
        digit_2 = num_2[counter_2]  - '0';
        digit_2 += carry;
        if(digit_1 < digit_2){
            sum[counter_sum] = (digit_1 + 10 - digit_2) + '0';
            carry = 1;
        }
        else{
            sum[counter_sum] = (digit_1 - digit_2) + '0';
            carry = 0;
        }
        counter_1--;
        counter_2--;
        counter_sum--;
    }
    while(counter_1 >= 0){
        digit_1 = num_1[counter_1]  - '0';
        if(digit_1 < carry){
            sum[counter_sum] = (digit_1 + 10 - carry) + '0';
            carry = 1;
        }
        else{
            sum[counter_sum] = (digit_1 - carry) + '0';
            carry = 0;
        }
        counter_1--;
        counter_sum--;
    }
    sum[counter_sum] = carry + '0';

    if((n = strspn(sum, "0" ) ) != 0){
        if(sum[n] != '\0')
            sum = &sum[n];
        else
            sum = "0\0";
    }    
    puts(sum);
    return sum; 
}


int main(){

    sub("1000", "909");
    
    sub("10", "3");
    
    sub("123", "23");  // 123 + 456 == 579
    sub("100", "99");
    
    sub("12", "456");
    sub("101", "100");
    sub("63829983432984289347293874", "90938498237058927340892374089");
    

    return 0;
}

