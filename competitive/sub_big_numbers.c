#include <stdlib.h>
#include <string.h>
#include <stdio.h>

char *sub(const char *a, const char *b){

    int size_1 = strlen(a);
    int size_2 = strlen(b);
    int carry = 0, counter_1, counter_2, counter_sum, size_sum, n, digit_1, digit_2;

    if(size_1 > size_2)
        size_sum = size_1 + 2;
    else
        size_sum = size_2 + 2;
    counter_1 = size_1 - 1, counter_2 = size_2 - 1, counter_sum = size_sum - 2;

    char *sum = malloc(size_sum*sizeof(char));
    sum[size_sum-1] = '\0';

    while(counter_1 >= 0 && counter_2 >= 0){
        digit_1 = a[counter_1]  - '0';
        digit_2 = b[counter_2]  - '0';
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
        digit_1 = a[counter_1]  - '0';
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
    

    while(counter_2 >= 0){
        digit_1 = b[counter_2]  - '0';
        if(digit_1 < carry){
            sum[counter_sum] = (digit_1 + 10 - carry) + '0';
            carry = 1;
        }
        else{
            sum[counter_sum] = (digit_1 - carry) + '0';
            carry = 0;
        }
        counter_2--;
        counter_sum--;
    }
    

    int zero_ctr = 0;
    int i = 0;
    
    while(sum[i]<'1' || sum[i]>'9'){
        zero_ctr++;
        i++;
    }
    for(int i = 0; i < size_sum - zero_ctr; i++) sum[i] = sum[i + zero_ctr];

  
    puts(sum);
    return(sum);


}


int main(){

    sub("1000", "909");
    
    sub("10", "3");
    
    sub("123", "23");  // 123 + 456 == 579
    sub("100", "99");
    
    sub("456", "12");
    sub("101", "100");
    sub("63829983432984289347293874", "90938498237058927340892374089");
    

    return 0;
}

