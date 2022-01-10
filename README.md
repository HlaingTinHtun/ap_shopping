# AP Shopping (A small prototype e-commerce system)

#### Description

In this small prototype e-comerce system , there are two main parts called user and admin panels. <br />
> There are still many aspects to improve to be like a real world e-commerce system but I added overall features and built a prototype.

#### User Panel
Users can register for account and login to use the website. <br />
Like normal ecommerce sytem, users will be able browse the products, search for specific item and they can look detail for each of the item.
Add to cart function is also available to add the products to cart. After their shopping is finished can finally checkout to the order process.
In the mean time, they can also remove items from the cart if they changed their mind or accidentailly put the the items to cart.

#### Admin Panel

Admin panel mainly supposed to be able to manage the products, categories and reports.
For this reasons , I added management screen for products. Admin will be able to add, update, delete the products from the admin panel.
Same functionalites for the categories as well. Admin can also see the order and order detail listings which are like the reports from customer's shopping.
Moreover, I added some reporting stuffs like weekly and monthly report.


#### Source code explanation
I will add explanations for each of the source code file I developed diving the customer and admin side as above.


##### Customer panel (User Panel)
- Customer side design: I used the free boostrap template and customise a bit by myself depending on the needs. All of these assets are stored in `css, js, fonts, scss, img` folder.
- config: Database and other configurations related with customer are stored in `config` folder.
- header.php: Customer template header design code and search,cart functions are included.
- footer.php: Customer template footer design layout file.
- register.php: Creating an account for the user, necessary validations are also added.
- login.php: Users can login with their registered account on our system.
- logout.php: Logging out from our system.
- index.php: All of the products, categories are retrieved in this file. I added search and paginations as well to be able to browse the products better.
- product_detail.php: Selecting the specific product and show the detail information to user.
- add_to_cart.php: Users can add their desired products to cart. I used session to control the cart data.
- clear_all.php: To remove all the items from shopping cart.
- cart_item_clear: To remove the specific item from shopping cart.
- cart.php: Displaying all the items that users added to the cart.
- sale_order.php: Users can finally checkout and place the order. Order informations are stored in database along with user info.

#### Admin panel
- Admin panel design: I used the `adminlte` libray and all of these assets are stored in `dist, plugins` folder.
- images: Products images are stored in this folder.
- config: Database and other admin configurations related with admin are stored in `config` folder.
- header.php: Admin template header design code and search function is included.
- footer.php: Admin template footer design layout file.
- login.php: Admin has to login to use admin panel.
- logout.php: Logging out from admin panel.
- index.php: Displaying the list of products along with proper pagination and search.
- product_add.php: Adding a new product and store it in database.
- product_edit.php: Updating an existing product.
- product_delete.php: Deleting an existing product.
- category.php: Listing of all categories.
- cat_add.php: Adding a new category and store it in database.
- cat_edit.php: Updating an existing category.
- cat_delete.php: Deleting an existing category.
- user_list.php: Listing of all registered customers (users).
- user_add.php: Adding a new user/customer from admin side to use our system.
- user_edit.php: Updating the information of an existing user.
- user_delete.php: Deleting an existing user.
- order_list.php: Displaying the list of orders placed by customers.
- order_detail.php: Displaying the detail information of a specific order record.
- weekly_report.php: Displaying the order histories within a week.
- monthly_report.php: Displaying the order histories within a month.
