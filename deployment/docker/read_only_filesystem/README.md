### Read only Filesystem

`sudo docker run --read-only -it --rm  test /bin/bash`

Now no user can change the file system.

If anyone want to do.
1. Creat a file
2. Remove a file

So these operation will not execute
