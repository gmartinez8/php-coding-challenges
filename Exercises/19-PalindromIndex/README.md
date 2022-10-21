# Palindrom Index

## Introduction
Given a string of lower case letters in the range ascii[a-z], identify the index of character to be removed to change the string into a palindrome. If the string cannot be converted to palindrome or is already a palindrome just return $-1$ else return index of the character to be removed.


### Example

$s =$ $"bcbc"$

Either remove $'b'$ at index $0$ or $'c'$ at index $3$.


**Function Description**

palindrom_index  has the following paramter(s):

- `string s`: a string to analyze

**Returns**

- `int`: the index of the character to remove or $-1$

**Sample Input**

```
aaab
```

**Sample Output**
```
3
```
