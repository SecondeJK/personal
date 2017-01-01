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

print('%s/%s/%s %s:%s:%s' % (now.month, now.day, now.year, now.hour, now.minute, now.second))

# Some string wordplay from Code Academy
pyg = 'ay'

'''
original = input('Enter a word:')
word = original.lower()
first = word[0]
new_word = word + first + pyg
new_word = new_word[1:len(new_word)]

if len(original) > 0 and original.isalpha():
    print(new_word)
else:
    print('empty')
'''

#Basic built in numeric functions
maximum = max(4,5,7,8,3,8)
print(maximum)
minimum = min(45,36,77,22,11,5)
print(minimum)
#Get the absolute value of something
print(abs(-45))

print('Really, really handy for debugging: print type of object.')
print(type(35))
print(type(45.34))
print(type('dave'))
