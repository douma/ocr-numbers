# OCR Numbers

`https://exercism.io/my/solutions/9cffc09ead644cf6b8bb723ebe4c0b77`

## To OCR

Run:

`php src/examples/to.php 1234567890`

Output:

```
    _  _     _  _  _  _  _  _ 
  | _| _||_||_ |_   ||_||_|| |
  ||_  _|  | _||_|  ||_| _||_|
                              
```

## From OCR

Create the following file (`/tmp/test.txt`):

```
    _  _     _  _  _  _ 
  | _| _||_||_   ||_||_|
  ||_  _|  | _|  ||_| _|
                        
```

Or with:

`php src/examples/to.php 123456789 > /tmp/test.txt`

`php src/examples/from.php /tmp/test.txt`

Output: 

`123456789`
