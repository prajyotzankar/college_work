#include <stdbool.h>
#include <stdlib.h>
#include <stdio.h>

int *snail(size_t *outsz, const int **mx, size_t rows, size_t cols){
    *outsz = rows*cols;
    int row, col, size, length = rows*cols;
    int * arr = (int * )malloc(length * sizeof(int));
    int rs = 0, cs = 0;
    row = rs;
    col = cs;
    rows = (int)rows;
    cols = (int)cols;
    size = 0;

    while(1){
        while(col < cols){
            arr[size] = *(*(mx + row) + col);
            size++;
            col++;
        }
        rs++;
        col--;
        row++;
        if(size == length)
            return arr;

        while(row < rows){
            arr[size] = *(*(mx + row) + col);
            size++;
            row++;
        }
        cols--;
        row--;
        col--;
        if(size == length)
            return arr;

        while(col >= cs){
            arr[size] = *(*(mx + row) + col);
            size++;
            col--;
        }
        rows--;
        col++;
        row--;
        if(size == length)
            return arr;

        while(row >= rs){
            arr[size] = *(*(mx + row) + col);
            size++;
            row--;
        }
        cs++;
        row++;
        col++;
        if(size == length)
            return arr;

    }
}






