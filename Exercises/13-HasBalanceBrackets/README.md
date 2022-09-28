

# Has Balance Brackets
## Introducción
Create a bracket validator. The idea is to check that the brackets are balanced correctly.

Valid brackets are as follows: **[ ] ( ) { }**

### Examples

**input:** 
```
s = "{ [ ] ( ) }"
```
**output:** true

**input:** 
```
s = "{ [ ( ] ) }"   
```
**output:** false

**input:** 
```
"{ [ }"
```
**output:** false

**input:** 
```
s = "{ [ ( [ { ( )[ ]{ } } ] ) ] }"
```
**output:** true

## Tips!

1. You have:
   * opening: - **( { [** 
   * closing: - **) } ]**

2. Each closing bracket must correspond to the closest matching opening bracket.

3. Each opening and closing bracket must be in a pair.

4. Then you have to track the opening brackets and see if when we find a closing bracket, it matches the closest opening bracket.

