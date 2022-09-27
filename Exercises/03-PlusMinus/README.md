# Plus Minus

## Introduction
Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with  places after the decimal.

Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to  are acceptable.

### Example

```
arr = [1,1,0,-1,-1]
```

There are `n=5` elements, two positive, two negative and one zero. Their ratios are:

- positive: $\frac{2}{5}$ = 0.40000
- negative: $\frac{2}{5}$ = 0.40000
- positive: $\frac{1}{5}$ = 0.20000

**Results are printed as:**

```
0.40000
0.40000
0.20000
```

**Function Description**

Print the ratios of positive, negative and zero values in the array. Each value should be printed on a separate line with  digits after the decimal. The function should not return a value.

**Output Format**

Print the following  lines, each to  decimals:

- proportion of positive values
- proportion of negative values
- proportion of zeros