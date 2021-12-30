#include <stdlib.h>
#include <string.h>
#include <stdio.h>

char *add(const char *a, const char *b){

    int size_1 = strlen(a);
    int size_2 = strlen(b);
    int carry = 0, counter_1, counter_2, counter_sum, size_sum, n;

    if(size_1 > size_2)
        size_sum = size_1 + 2;
    else
        size_sum = size_2 + 2;
    counter_1 = size_1 - 1, counter_2 = size_2 - 1, counter_sum = size_sum - 2;

    char *sum = malloc(size_sum*sizeof(char));
    sum[size_sum-1] = '\0';

    while(counter_1 >= 0 && counter_2 >= 0){
        sum[counter_sum] = (a[counter_1]  - '0' + b[counter_2]  - '0' + carry) + '0';
        carry = (sum[counter_sum]  - '0')/10;
        sum[counter_sum] = (abs(sum[counter_sum]  - '0' - carry*10)) + '0';
        counter_1--;
        counter_2--;
        counter_sum--;
    }

    while(counter_1 >= 0){
        sum[counter_sum] = (a[counter_1]  - '0' + carry) + '0' ;
        carry = (sum[counter_sum]  - '0')/10;
        sum[counter_sum] = (abs(sum[counter_sum]  - '0' - carry*10)) + '0';
        counter_1--;
        counter_sum--;
    }

    while(counter_2 >= 0){
        sum[counter_sum] = (b[counter_2]  - '0' + carry) + '0' ;
        carry = (sum[counter_sum]  - '0')/10;
        sum[counter_sum] = (abs(sum[counter_sum]  - '0' - carry*10)) + '0';
        counter_2--;
        counter_sum--;
    }

    sum[counter_sum] = carry + '0';

    if((sum[0] - '0') == 0)
        for(int i = 0; i < size_sum - 1; i++) sum[i] = sum[i + 1];
  
    puts(sum);
    return(sum);


}


int main(){

    add("1", "3");
    add("123", "456");  // 123 + 456 == 579
    add("888", "222");
    add("1372", "69");
    add("12", "456");
    add("101", "100");
    add("63829983432984289347293874", "90938498237058927340892374089");

    return 0;
}
