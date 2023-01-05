
# PHP url rewrite example

For some reason... this is really confusing and we can't find any information about it.

We've tried to pay experts - but we can't seem to find any - anywhere.

Staged site: https://peprojects.dev/examples/php-url-rewrite-example

Know about it? We'll give you $$$ to explain it to us (clearly)  ;)

- ?
- ?page=about
- ?page=contact
- ?page=projects
- ?page=project&slug=project-name

At first we thought ^ would be used - and then we would turn it into the following.

- /home
- /about
- /contact
- /projects
- - projects/project-name (case-study of each)

But as far as we can learn, it's the opposite. You start with the clean URLs and then rewrite them behind the scenes


## .htaccess style of rewriting the URL

```
# comment

# turn rewriting on
RewriteEngine On


# /projects  →  ?page=projects
# getting tangled up with the next one?

# /page-name →                 				?page=page-name
RewriteRule ^([0-9a-zA-Z_-]+)$ 				?page=$1 [NC,L]

# /projects/project-name  →             	?page=projects&slug=project-slug
RewriteRule ^projects/([0-9a-zA-Z_-]+)$ 	?page=project&slug=$1 [NC,L]

# /exercises/exercise-name  →            	?page=exercise&slug=exercise-slug
RewriteRule ^exercises/([0-9a-zA-Z_-]+)$ 	?page=exercise&slug=$1 [NC,L]

# /layouts/layout-name →              		?page=module&slug=module-slug
RewriteRule ^layouts/([0-9a-zA-Z_-]+) 		?page=module&slug=$1 [NC,L]
```

but the funny thing here... is there's actually a /projects folder - so that trips things up -- it tries to get that before the rewrite/redirect - 

So, the best idea for that so far was to make a different folder or just prepend with a _ or something.

Now that ^ worked. But the next part of the puzzle... is that the path / (the local path vs the path up on the server -- aren't the same etc) -- so, we'll need a way to either set that root with base - - or have some function that sets the path and use that for all the paths and allows them to behave like relative paths  / so that the site can be moved to any server and still work.

## How do you know when it works?

* [ ] it works.




.



.



.



.
