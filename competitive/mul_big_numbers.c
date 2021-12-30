// https://www.codewars.com/kata/55911ef14065454c75000062/train/c

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


int max(int num1, int num2)
{
    return (num1 > num2 ) ? num1 : num2;
}

char *multiply(const char *x, const char *y){

    int size_x = strlen(x);
    int size_y = strlen(y);

    if(size_x == 1 && size_y == 1){
        int num_1 = x[0] - '0';
        int num_2 = y[0] - '0';
        char *num = malloc(sizeof(char));
        num_1 = num_1*num_2;
        
        if(num_1 > 9){
            char char_array[3];
            char_array[0] = (num_1/10) + '0';
            char_array[1] = (num_1%10) + '0';
            char_array[2] = '\0';
            num = char_array;
            return(num);
        }
        
        char char_array[2];
        char_array[0] = num_1 + '0';
        char_array[1] = '\0';
        num = char_array;
        return(num);
        
    }

    
    int i, j;

    int x_h_size = size_x/2;
    int y_h_size = size_y/2;
    y_h_size = max(y_h_size, x_h_size);
    x_h_size = y_h_size;
    int x_l_size = size_x - x_h_size;

    
    int y_l_size = size_y - y_h_size; 

    char *x_h = malloc(x_h_size*sizeof(char));
    char *x_l = malloc(x_l_size*sizeof(char));
    char *y_h = malloc(y_h_size*sizeof(char));
    char *y_l = malloc(y_l_size*sizeof(char));

    for(i = 0 ; i < x_h_size ; i++ ) x_h[i] = x[i];
    for(j = 0; j < x_l_size ; i++, j++ ) x_l[j] = x[i];

    for(i = 0 ; i < y_h_size ; i++ ) y_h[i] = y[i];
    for(j = 0; j < x_l_size ; i++, j++) y_l[j] = y[i];


    int a_size = x_h_size+y_h_size-1;
    int d_size = x_l_size+y_l_size-1;
    int e_size = x_l_size+y_l_size+1;

    char *a = malloc(a_size*sizeof(char));
    char *d = malloc(d_size*sizeof(char));
    char *e = malloc(e_size*sizeof(char));

    a = multiply(x_h,y_h);
    d = multiply(x_l,y_l);
    e = multiply(add(x_h, x_l), add(y_h, y_l));
    e = sub(e, a);
    e = sub(e, d);
    puts(a);
    puts(d);
    puts(e);
    //return int(a*(10**(m*2)) + e*(10**m) + d)
    
    int final_ans_size = a_size + d_size + e_size + (x_h_size*3);
    char *final_ans = malloc(final_ans_size*sizeof(char));

    for(i = 0 ; i < x_h_size*2 ; i++)
        final_ans[i] = a[i];

    for(j=0 ; i < x_h_size*3 ; i++, j++)
        final_ans[i] = e[j];

    for(j=0 ; j < d_size ; i++, j++)
        final_ans[i] = d[j];
    final_ans[i] = '\n';

    return(final_ans);

}


int main(){

    // printf("%s \n", multiply("4", "2"));
    // multiply("123", "456");  // 123 + 456 == 579
    printf("%s ", multiply("888", "222"));
    // multiply("1372", "69");
    // multiply("12", "456");
    // multiply("101", "100");
    // printf("%s ", multiply("63829983432984289347293874", "90938498237058927340892374089"));

    return 0;
}
