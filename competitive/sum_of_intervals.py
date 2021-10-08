def sum_of_intervals(intervals):
    size = len(intervals)
    int_len = 0
    if size > 1:
        li = sorted(intervals)
        print(li)
        posi = 0 
        while posi < size - 1:
            i = posi + 1
            if li[posi][1] >= li[i][0]:
                if li[posi][1] <= li[i][1]:
                    li[posi] = (li[posi][0], li[i][1])
                li.remove(li[i])
                size -= 1
            else:
                int_len += abs(li[posi][1] - li[posi][0])
                posi += 1         
        int_len += abs(li[posi][1] - li[posi][0])
        return(int_len)
    else:
        return abs(intervals[0][0] - intervals[0][1])

print(sum_of_intervals([(-62, 459), (138, 178), (379, 437), (339, 469), (335, 353), (-314, 487), (237, 423), (-357, -296), (-140, -97), (-126, 53), (-177, 72), (-85, 338), (-235, -44), (438, 489), (-33, 117), (446, 484), (27, 272)]))
