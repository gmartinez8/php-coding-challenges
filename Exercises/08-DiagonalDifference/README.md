# Diagonal Difference

## Introduction
Given a square matrix, calculate the absolute difference between the sums of its diagonals.

### Example

```
1 2 3
4 5 6
9 8 9
```

The left-to-right diagonal = `1 + 5 + 9 = 15`. 

The right to left diagonal = `3 + 5 + 9 = 17`. 

Their absolute difference is `|15 - 17| = 2`.

**Function Description**

diagonal_difference takes the following parameter:

`int arr[n][m]`: an array of integers

**Returns**

int: the absolute diagonal difference

**Sample Input**

```
arr = [
  [11, 2,  4],
  [ 4, 5,  6],
  [10, 8,-12],
]



```

**Sample Output**
```
15
```
