def is_interesting(number, awesome_phrases):
    if number > 99:
        numbers = [number, number + 1, number + 2]
        for i in range(3):
            number_digits = []
            num = numbers[i]
            #convert the number into list of its digits
            while(num > 0):
                number_digits.append(num%10)
                num = num//10


            #reversed digits of the number
            number_rev = 0
            number_rev = int("".join([str(n) for n in number_digits]))

            #flag for record if any required condition is true
            flag = 0

            #check for 
            #   number in awesome_phrases or 
            #   it the number is single digit followed by all 0 or
            #   is it palindrome
            if (numbers[i] in awesome_phrases) or (sum(number_digits[:-1]) == 0) or (numbers[i] == number_rev):
                flag = 1

            #check for 
            #  Every digit is the same number: 1111 
            #  The digits are sequential, incementing†: 1234
            #  The digits are sequential, decrementing‡: 4321
            else:
                flag_same = 1
                flag_inc = 1
                flag_dec = 1

                for counter in range(len(number_digits)-1):
                    if number_digits[counter] != number_digits[counter+1]:
                        flag_same = 0
                    if number_digits[counter] + 1 != number_digits[counter + 1]:
                        if number_digits[-2] == 9:
                            if number_digits[-1] == 0:
                                flag_inc = 1
                            else:
                                flag_inc = 0
                        else:
                            flag_inc = 0
                    if number_digits[counter] - 1 != number_digits[counter + 1]:
                        flag_dec = 0
        
                if flag_dec or flag_same or flag_inc:
                    flag = 1

                
            if flag:
                if i > 0:
                    return 1
                else:
                    return 2
    else:
        if number == 99 or number == 98:
            return 1
    return 0


print(is_interesting( 67890, [1337, 256]))


#0 1 2 0 1 2 

""""
Any digit followed by all zeros: 100, 90000 1
Every digit is the same number: 1111 1
The digits are sequential, incementing†: 1234
The digits are sequential, decrementing‡: 4321
The digits are a palindrome: 1221 or 73837
The digits match one of the values in the awesome_phrases array0

print(is_interesting( 3, [1337, 256]))
print(is_interesting( 1336, [1337, 256]))
print(is_interesting( 1337, [1337, 256]))
print(is_interesting( 11208, [1337, 256]))
print(is_interesting( 11209, [1337, 256]))
"""