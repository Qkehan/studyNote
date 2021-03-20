# 在这里写上你的代码 :-)
for i in range(20):   # range步进次数循环
    if i%2 != 0:    # 如果i的余数不等于零,%相当于mod，也就是计算除法的余数，比如5%2就得到1。
                print(i)   # 直接打印
                continue  # continue跳到开始位置
    i += 2   #如果余数等于零直接加2输出。
    print(i)
