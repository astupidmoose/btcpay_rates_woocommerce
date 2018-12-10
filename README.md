# btcpay_rates_woocommerce
This is a small script to display BTC currency rates on your woocommerce installation. 

# How to Install
Always backup your functions.php file before editing!

Copy the contents of functions.php into your "function.php" in your theme's editor. It might be best to use a child theme to avoid any overwrites later on. 

# How to Setup
Edit the following variable with your own settings:

$serverurl - Add your default URL for the login screen of your BTCPay login. (Make sure you use HTTPS:// if available)

$storeID - This is the actual store ID from BTCpay. To find this, setup a storethen click "Stores>Settings" and copy the ID field.

$localcurrency - Three digit currency code such as USD/CAD/EUR. 

$introtext - *Optional - used as an intro. Example "Current Exchange Rates:".

# Adding / Removing Coins

This setup is for Bitcoin, Litecoin, Dogecoin and Dash. If you do not have all of these coins, or if you have other coins its very easy to add and remove these. 

To Add: 
Using Bitcoin as a template, simply copy and paste all code between //BTC Bitcoin and //end Bitcoin.

To Remove:
Simply Delete all content between //COIN Coin and //end Coin

# Shortcode

You can pull these rates anywhere or anytime in woocommerce using the shortcode [crypto_rates]


# Issues Q&A

###### Question: I received an error when editing the theme - "Scrape nonce check failed. Please try again."
Answer: There may be issues with some plugins you have optimizing your store. You should disable any caching and image optimization plugins and then update the theme. (always backup first)
