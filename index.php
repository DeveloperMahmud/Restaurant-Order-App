<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'resturant';
    $connected = mysqli_connect($host,$user,$pass,$db_name);
    if(!$connected) die('Connection Failed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Shop</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="overlay_menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Recipe</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <button id="close_btn">Close</button>
    </div>
    <nav class="main_menu">
        <div class="menu_container">
            <img src="./assets/icons/search.svg " alt="" id="icon_search" class="search_icon icon">
            <img src="./assets/icons/menu.svg" alt="" id="icon_menu" class="menu_icon icon">
        </div>
    </nav>

    <header>
        <ul class="food_menu">
            <?php
                $types_query = 'SELECT type_name FROM food_type';
                $types = mysqli_query($connected,$types_query);
                while($type = mysqli_fetch_assoc($types)){?>
                    <li><a href="#"><?=$type['type_name'] ?></a></li>
                <?php    
                }
            ?>
        </ul>
        <div id="checkout_btn" class="food_cart">
            <span id="cart_total"> 0 </span> : <button id="header_cart_btn">Check Out</button>
        </div> 
    </header>

    <main>
        <div class="food_container">
            <div class="food_item_selected single_food_item" data-food-id="01">
                <span class="calory_counter">
                    472 kcal
                </span>
                <div class="slider_photos">
                    <img src="./assets/images/chicken-cheese.png" alt="Classic Burger" class="single_photo">
                </div>
                <h2>Classic Burger</h2>
                <ul class="ingredients">
                    <li>Fat - 26g</li>
                    <li>Saturates - 10g</li>
                    <li>Sugars - 18g</li>
                    <li>salt - 1g</li>
                </ul>
                <p class="description">
                    The classic burge is an all time BBQ favorite!This super easy homemade beefburger recipe gives you delicious patties, packed with onions and herbs for extra flavour, that are perfect for topping with cheese, lettue and tomato, and sandwiching between floury buns.
                </p>
                <div class="food_item_footer">
                    <div class="qty_counter">
                        <span class="decrease"> - </span>
                        <span class="qty_ammount"> 1 </span>
                        <span class="increase"> + </span>
                    </div>
                    <div class="add_to_cart">
                        <div class="price" data-unit-price="16">16</div>
                        <button class="cart_btn">
                            <span class="cart_icon">
                                <img class="cart_icon_img" src="./assets/icons/shopping_cart.svg" alt="shopping cart">
                            </span>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="food_item single_food_item" data-food-id="02">
                <span class="calory_counter">
                    326 kcal
                </span>
                <div class="slider_photos">
                    <img src="./assets/images/meat_burger.png" alt="Double Burger" class="single_photo">
                </div>
                <h2>Double Burger</h2>
                <ul class="ingredients">
                    <li>Fat - 26g</li>
                    <li>Saturates - 10g</li>
                    <li>Sugars - 18g</li>
                    <li>salt - 1g</li>
                </ul>
                <p class="description">
                    Heat the olive oil in a frying pan, add the onion and cook for 5 minutes until softened...
                </p>
                <div class="food_item_footer">
                    <div class="qty_counter">
                        <span class="decrease"> - </span>
                        <span class="qty_ammount"> 1 </span>
                        <span class="increase"> + </span>
                    </div>
                    <div class="add_to_cart">
                        <div class="price" data-unit-price="16" data-unit-price="18">18</div>
                        <button class="cart_btn">
                            <span class="cart_icon">
                                <img class="cart_icon_img" src="./assets/icons/shopping_cart.svg" alt="shopping cart">
                            </span>
                        </button>
                    </div>
                </div>      
            </div>
            <div class="food_item single_food_item" data-food-id="03">
                <span class="calory_counter">
                    218 kcal
                </span>
                <div class="slider_photos">
                    <img src="./assets/images/green burger.png" alt="Green Burger" class="single_photo">
                </div>
                <h2>Green Burger</h2>
                <ul class="ingredients">
                    <li>Fat - 26g</li>
                    <li>Saturates - 10g</li>
                    <li>Sugars - 18g</li>
                    <li>salt - 1g</li>
                </ul>
                <p class="description">
                    In a bowl, combine the beef mince with the herbs and the egg.Season, add the onions...
                </p>
                <div class="food_item_footer">
                    <div class="qty_counter">
                        <span class="decrease"> - </span>
                        <span class="qty_ammount"> 1 </span>
                        <span class="increase"> + </span>
                    </div>
                    <div class="add_to_cart">
                        <div class="price" data-unit-price="16" data-unit-price="20">20</div>
                        <button class="cart_btn">
                            <span class="cart_icon">
                                <img class="cart_icon_img" src="./assets/icons/shopping_cart.svg" alt="shopping cart">
                            </span>
                        </button>
                    </div>
                </div>      
            </div>
            <div class="food_item single_food_item" data-food-id="04">
                <span class="calory_counter">
                    280 kcal
                </span>
                <div class="slider_photos">
                    <img src="./assets/images/veg_lg_burger.png" alt="Veh large Burger" class="single_photo">
                </div>
                <h2>Taj Chili Burger</h2>
                <ul class="ingredients">
                    <li>Fat - 26g</li>
                    <li>Saturates - 10g</li>
                    <li>Sugars - 18g</li>
                    <li>salt - 1g</li>
                </ul>
                <p class="description">
                    Cook the burgers on a preheated berbecue or griddle for 5 - 6 minutes on each side...
                </p>
                <div class="food_item_footer">
                    <div class="qty_counter">
                        <span class="decrease"> - </span>
                        <span class="qty_ammount"> 1 </span>
                        <span class="increase"> + </span>
                    </div>
                    <div class="add_to_cart">
                        <div class="price" data-unit-price="22">22</div>
                        <button class="cart_btn">
                            <span class="cart_icon">
                                <img class="cart_icon_img" src="./assets/icons/shopping_cart.svg" alt="shopping cart">
                            </span>
                        </button>
                    </div>
                </div>      
            </div>
            <div class="food_item single_food_item" data-food-id="05">
                <span class="calory_counter">
                    312 kcal
                </span>
                <div class="slider_photos">
                    <img src="./assets/images/veg_meat.png" alt="Veg Meat Burger" class="single_photo">
                </div>
                <h2>Healthy Burger</h2>
                <ul class="ingredients">
                    <li>Fat - 26g</li>
                    <li>Saturates - 10g</li>
                    <li>Sugars - 18g</li>
                    <li>salt - 1g</li>
                </ul>
                <p class="description">
                    Meanwhile, lightly toast the cut-sides of the buns on the barbecuee.Fill with the...
                </p>
                <div class="food_item_footer">
                    <div class="qty_counter">
                        <span class="decrease"> - </span>
                        <span class="qty_ammount"> 1 </span>
                        <span class="increase"> + </span>
                    </div>
                    <div class="add_to_cart">
                        <div class="price" data-unit-price="14">14</div>
                        <button class="cart_btn">
                            <span class="cart_icon">
                                <img class="cart_icon_img" src="./assets/icons/shopping_cart.svg" alt="shopping cart">
                            </span>
                        </button>
                    </div>
                </div>      
            </div>
        </div>
    </main>

    <div id="cart_details" style="display: none;">
        <span id="close_modal">X</span>
        <table class="cart_table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Unite Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="cart_details_tbody">

            </tbody>
            <tfoot>
                <td colspan="4">Total Price</td>
                <td id="total_cart_price"></td>
            </tfoot>
        </table>
        <div id="card_action">
            <button id="clear_cart" class="cart_action_btn">CLEAR CART</button>
            <button id="proceed_cart" class="cart_action_btn">PROCEED TO ORDER</button>
        </div>
    </div>

    <script src="./assets/js/app.js"></script>
</body>
</html>