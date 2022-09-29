# Caesar Cipher

## Introduction
Julius Caesar protected his confidential information by encrypting it using a cipher. Caesar's cipher shifts each letter by a number of letters. If the shift takes you past the end of the alphabet, just rotate back to the front of the alphabet. In the case of a rotation by 3, w, x, y and z would map to z, a, b and c.

```
Original alphabet:      abcdefghijklmnopqrstuvwxyz
Alphabet rotated +3:    defghijklmnopqrstuvwxyzabc
```

### Example

$s =$ There's-a-starman-waiting-in-the-sky

$k = n$

The alphabet is rotated by $3$, matching the mapping above. The encrypted string is
Wkhuh'v-d-vwdupqdq-zdlwlqj-lq-vkh-vnb

**Note:** The cipher only encrypts letters; symbols, such as `-`, remain unencrypted. 

**Function Description**

caesar_cipher  has the following paramter(s):

- `string s`: cleartext
- `int k`: the alphabet rotation factor

**Returns**

`string`: the encrypted string


**Sample Input**

```
middle-Outz
2
```

**Sample Output**
```
okffng-Qwvb
```

**Explanation**

```
Original alphabet:      abcdefghijklmnopqrstuvwxyz
Alphabet rotated +2:    cdefghijklmnopqrstuvwxyzab

m -> o
i -> k
d -> f
d -> f
l -> n
e -> g
-    -
O -> Q
u -> w
t -> v
z -> b
```