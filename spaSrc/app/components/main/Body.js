import React from 'react';


export default class Body extends React.Component{
    render() {
        return (
            <div id="body">
                <div className="container">
                    <div className="last-products">
                        <h2>Last added products</h2>
                        <section className="products">
                            <article>
                                <img src="images/1.jpg" alt=""/>
                                    <h3>Excepteur sint occaecat</h3>
                                    <h4>$1 850.00</h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                            </article>
                            <article>
                                <img src="images/11.jpg" alt=""/>
                                    <h3>Lorem ipsum dolor</h3>
                                    <h4>$990.00</h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                            </article>
                            <article>
                                <img src="images/12.jpg" alt=""/>
                                    <h3>cupidatat non proident</h3>
                                    <h4>$1 200.00</h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                            </article>
                            <article>
                                <img src="images/13.jpg" alt=""/>
                                    <h3>Duis aute irure</h3>
                                    <h4>$2 650.00</h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                            </article>
                            <article>
                                <img src="images/14.jpg" alt=""/>
                                    <h3>magna aliqua</h3>
                                    <h4>$3 500.00</h4>
                                    <a href="cart.html" className="btn-add">Add to cart</a>
                            </article>
                        </section>
                    </div>
                    <section className="quick-links">
                        <article>
                            <a href="#" className="table">
                                <div className="cell">
                                    <div className="text">
                                        <h4>Lorem ipsum</h4>
                                        <hr/>
                                            <h3>Dolor sit amet</h3>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <article className="red">
                            <a href="#" className="table">
                                <div className="cell">
                                    <div className="text">
                                        <h4>consequatur</h4>
                                        <hr/>
                                            <h3>voluptatem</h3>
                                            <hr/>
                                                <p>Accusantium</p>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <article>
                            <a href="#" className="table">
                                <div className="cell">
                                    <div className="text">
                                        <h4>culpa qui officia</h4>
                                        <hr/>
                                            <h3>magnam aliquam</h3>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </section>
                </div>
            </div>
        );
    }
}