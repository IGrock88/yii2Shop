import React from 'react';
import Aside from "./Aside";

export default class Body extends React.Component{
    render() {
        return (
            <div id="body">
                <div className="container">
                    <div className="pagination">
                        <ul>
                            <li><a href="#"><span className="ico-prev"></span></a></li>
                            <li><a href="#">1</a></li>
                            <li className="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><span className="ico-next"></span></a></li>
                        </ul>
                    </div>
                    <div className="products-wrap">
                        {/*<Aside/>*/}
                        <div id="content">
                            <section className="products">
                                <article>
                                    <a href="product.html"><img src="images/11.jpg" alt=""/></a>
                                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                                    <h4><a href="product.html">$990.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/12.jpg" alt=""/></a>
                                    <h3><a href="product.html">cupidatat non proident</a></h3>
                                    <h4><a href="product.html">$1 200.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/13.jpg" alt=""/></a>
                                    <h3><a href="product.html">Duis aute irure</a></h3>
                                    <h4><a href="product.html">$2 650.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/14.jpg" alt=""/></a>
                                    <h3><a href="product.html">magna aliqua</a></h3>
                                    <h4><a href="product.html">$3 500.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/15.jpg" alt=""/></a>
                                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                                    <h4><a href="product.html">$1 500.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/1.jpg" alt=""/></a>
                                    <h3><a href="product.html">cupidatat non proident</a></h3>
                                    <h4><a href="product.html">$3 200.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/16.jpg" alt=""/></a>
                                    <h3><a href="product.html">Duis aute irure</a></h3>
                                    <h4><a href="product.html">$2 650.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                                <article>
                                    <a href="product.html"><img src="images/17.jpg" alt=""/></a>
                                    <h3><a href="product.html">magna aliqua</a></h3>
                                    <h4><a href="product.html">$3 500.00</a></h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                                </article>
                            </section>
                        </div>
                    </div>
                    <div className="pagination">
                        <ul>
                            <li><a href="#"><span className="ico-prev"></span></a></li>
                            <li><a href="#">1</a></li>
                            <li className="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><span className="ico-next"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
}