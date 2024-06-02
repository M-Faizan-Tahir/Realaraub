import React from "react";
import "./add_product.css";

function add_products() {
    return (
        <>
            <div className="container">
                <h1>Add Product</h1>

                <form action="">
                    <label htmlFor="image" className="image"></label>
                    <input type="file" name="image" id="image" multiple style={{display:"none"}} />
                    <br />
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Product Name"
                    />
                    <br />
                    <input
                        type="text"
                        name="price"
                        id="price"
                        placeholder="Price"
                    />
                    <br />
                    <input
                        type="text"
                        name="quantity"
                        id="quantity"
                        placeholder="Available Quantity"
                    />
                    <br />
                    <textarea
                        name="description"
                        id="description"
                        cols="30"
                        rows="10"
                        placeholder="Breifly explain the product"
                    ></textarea>
                    <br />
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </>
    );
}

export default add_products;
