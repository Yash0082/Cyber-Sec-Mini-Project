# # c = float(input("C"))
# # g = float(input("G"))
# n = int(input('Number of subs: '))
# total_cred = 22

# cgpa = 0

# for i in range(n):
#     sum = 0

#     c = float(input("C"))
#     g = float(input("G"))
    
#     sum = sum + (c*g)

# cgpa = sum/total_cred

def cgpa():
    n = int(input('Number of subs: '))
    total_cred = 22

    cgpa = 0
    sum = 0
    for i in range(n):
        

        c = float(input(f"C{i}: "))
        g = float(input(f"G{i}: "))
        
        sum = sum + (c*g)

    cgpa = sum/total_cred
    return cgpa


print(cgpa())

