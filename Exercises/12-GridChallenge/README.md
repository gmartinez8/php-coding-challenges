# Grid Challenge

## Introduction
Given a square grid of characters in the range ascii[a-z], rearrange elements of each row alphabetically, ascending. Determine if the columns are also in ascending alphabetical order, top to bottom. Return **YES** if they are or **NO** if they are not.


### Example

$grid =$[$'$abc', 'ade','efg'$]$

The grid is illustrated below.
```
a b c
a d e
e f g
```
The rows are already in alphabetical order. The columns `a a e`, `b d f` and `c e g` are also in alphabetical order, so the answer would be YES. Only elements within the same row can be rearranged. They cannot be moved to a different row.

**Function Description**

grid_challenge  has the following paramter(s):

- `string grid[n]`: an array of strings

**Returns**

- `string`: either **YES** or **NO**

**Sample Input**

```
grid = ['ebacd', 'fghij', 'olmkn', 'trpqs', 'xywuv']
```
The grid is illustrated below.
```
ebacd
fghij
olmkn
trpqs
xywuv
```

**Sample Output**
```
YES
```
