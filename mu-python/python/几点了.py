# 在这里写上你的代码 :-)
import random
secret = random.randint(0,100)

print("-----------Qkehan----------")
temp = input("猜猜看几点了？！")
guess = int(temp)
while guess != secret:
    temp = input("no!!!!!")
    guess = int(temp)
    if guess == secret:
        print("我草你答对了！？")
        print("猜对了也没有奖品！")
    else:
        if guess > secret:
            print("哥，哇，好大呀！")
        else:
            print("啊，不够不够！")
print("游戏结束，不理你了^-^")
