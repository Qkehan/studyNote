# 在这里写上你的代码 :-)
a = [5, 10, 15, 20]

b = []

for n in a:
    if n > 5:
        b.append(n * 10)

print(b)


print("--------")

'''
ls = [-5, 2, 12, 20]  # 创建列表

# 输出ls中大于0的数
print([x for x in ls if x > 0])
# [2,12,20]

# 应用函数，求绝对值
print([abs(x) for x in ls])
# [5,2,12,20]

# 调用函数，转换大写
pet = ["Dog", "Cat", "Fox"]
print([newPet.upper() for newPet in pet])  #l.upper() 方法是将字符对象转换为大写。
# ['DOG','CAT','FOX']
'''

ls = [-5,-3,-2,2,3,5,12,20]
print([abs(x) for x in ls])
print("--------")




