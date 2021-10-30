<?php
	include_once("header.php");
?>
<hr>
<br>

<div class="detail-main">
    <div class="detail-grid">
        <table>
            <tr>
                <td>
                    <img src="picture/prod-110.jpg">
                </td>
            </tr>

        </table>
    </div>

    <div class="detail-description">
        <h2>Product Name</h2>
        <h5>Wooden, stable and ...</h5>
        <hr/>
        <table>
            <tr>
                <td>
                    <button class="choice-btn">Color 1</button>
                </td>
                <td>
                    <button class="choice-btn">Color 2</button>
                </td>
                <td>
                    <button class="choice-btn">Color 3</button>
                </td>
            </tr>
        </table>
        <hr/>
        <input type="number" id="quantity" min="1"></input>
        <button class="add2Cart-btn">Add to cart</button>
    </div>
</div>

<div class="content">
    <h2>Product Details</h2>
    <p>made of trachycarpus fortunei ...</p>
</div>

<div class="content">
    <h2>Similar Products</h2>
    <div class="similar-grid">
        <table>
            <tr>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="content">
    <h2>Best Sellers</h2>
    <div class="similar-grid">
        <table>
            <tr>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
                <td>
                    <a href ="productDetails.html"><img src="picture/prod-110.jpg"></a>
                </td>
            </tr>
        </table>
    </div>
</div>

<?php
	include_once("footer.php");
?>