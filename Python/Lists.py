print('Some array actions now, defined in Python as lists and dictionaries')

myArray = ['Birmingham', 'Manchester', 'Bristol', 'Portsmouth']
print('Starting list: ' + str(myArray))

#Right, time to add somethimg
myArray.append('Nottingham')
print('Appended a new city: ' + str(myArray))

#Give me an index
print('Give me the index of Bristol: ' + str(myArray.index('Bristol')))

#Overwrite index for Portsmouth
myArray.insert(3, "Glasgow")
print('Insert new city at index 3, here you go: ' + str(myArray))

for city in myArray:
    print("In this for loop, the city is %s" % city)

#That's nice, time to move on to dictionaries
myDictionary = {'Nottingham' : 'Lace', 'Sheffield' : 'Steel', 'Stoke' : 'Pottery'}

print('I created a dictionary of key value pairs. The main industry of Nottingham is %s' % myDictionary['Nottingham'])

multidimensional = {
    'Nottingham' : ['Lace,Beer,Iron'],
    'Birmingham' : ['Jewellry,Leather,Pork']
}

print(multidimensional['Nottingham'])
