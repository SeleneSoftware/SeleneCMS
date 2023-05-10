# Selene CMS
This is a skeleton application to illistrate the usage of the Selene CMS Bundle.  The bundle will add content management utilities to an application, or you can use this as a starting point for your own application.

## Features
Brought in from the CMS Bundle, you have
- Blog Posts - Write and post blog articles, and manage comments on the posts.
- Content Blocks - A custom Twig filter to manipulate content on the site with default values
- Image Blocks - A custom Twig filter to treat images just like content blocks.
- Admin Panel - Installs and provides a setup for [EasyAdminBundle](https://github.com/EasyCorp/EasyAdminBundle)
- User Management - User registration and user management in admin panel
- More to come!

## How To Use
The content fliter is a powerful way to edit and change your content on the fly.  Using a simple twig filter, you create the content blocks as the page loads.
```
{% apply title_content %}This is a Title Content Block{% endapply %}
{{ var|variable_content }}
 ```
The name of the filter is the name of the block you want, followed by ```_content```.  Whatever is coming through the content will be used as a default as the block is created in the admin panel.  Go make the changes in the panel and watch your content change.  And if you need, you can use the same block in various places, the content remains the same.

Image blocks are a little less powerful, but no less useful.  In your image tag, do the same as a content block but use ```_image```.  The default won't save to the database, but will load if the image hasn't been uploaded yet.  Just go in the backend and upload the images.

When creating a blog, you can also use an uploaded image for your article image.  There is a dropdown with all the images available.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
When creating a new feature branch, run a ```composer update````` and a  `````npm update````` and commit those changes first.

## License
[MIT](https://choosealicense.com/licenses/mit/)
