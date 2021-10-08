def digit_sum(num):
    num_list = [int(x) for x in list(str(num))]
    return sum(num_list)

def get_the_num(N):

    if N==0:
        return 0
    elif N == 1:
        return 1
    else:
        prev_num_1 = 1
        prev_num_2 = 0
        current_num = 0
        for i in range(N-1):
            current_num = digit_sum(prev_num_1) + digit_sum(prev_num_2)
            prev_num_2 = prev_num_1
            prev_num_1 = current_num
            i += 1
        return current_num
"""for i in range(20):
    print(get_the_num(i))"""


def no_of_filters(li_factories):
    li_factories.sort(reverse=True)
    total_pollution = sum(li_factories)
    target_pollution = total_pollution/2
    print(target_pollution)
    no_of_filters = 0
    i = 0
    for i in range(len(li_factories) - 1):

        while li_factories[i] >= li_factories[i+1]:
            print(total_pollution, target_pollution)
            if total_pollution <= target_pollution:
                return no_of_filters
            li_factories[i] /= 2
            print(li_factories[i])
            total_pollution -= li_factories[i]
            no_of_filters += 1
        i += 1
    
    while li_factories[i] >= 1:
        if total_pollution <= target_pollution:
            return no_of_filters
        li_factories[i] /= 2
        print(li_factories[i])
        total_pollution -= li_factories[i]
        no_of_filters += 1


def get_biggest_num(num):
    num_list = list(str(num))
    if num < 0:
        num_list = num_list[1:]
    new_nums = []
    for i in range(len(num_list)):
        if num_list[i] == '5':
            new_list = num_list[:i] + num_list[i+1:]
            new_nums.append(int("".join(new_list)))
    if num < 0:
        return min(new_nums)*(-1)
    return max(new_nums)
    
        

print(get_biggest_num(15985))
print(get_biggest_num(-5859))
print(get_biggest_num(-5000))

