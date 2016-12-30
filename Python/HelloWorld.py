from datetime import datetime

print("Time to practise Python!")

variableOne = 2
print('Print me a variable: ' + str(variableOne))
variableTwo = 36 * variableOne
print (str(variableTwo))

'''
name = input("What is your name?")
quest = input("What is your quest?")
color = input("What is your favorite color?")

print('Ah, so your name is %s, your quest is %s, ' \
"and your favorite color is %s." % (name, quest, color))
'''

now = datetime.now()
print('Starting some date functions. Here is the current date: ' + str(now))
print('And here is the year: ' + str(now.year))
print('And here is the month: ' + str(now.month))
print('And here is the day: ' + str(now.day))
