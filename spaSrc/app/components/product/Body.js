import React from 'react';


export default class Body extends React.Component{
    render() {
        return (
            <div id="body">
                <div className="container">
                    <div id="content" className="full">
                        <div className="product">
                            <div className="image">
                                <img src="images/5.jpg" alt=""/>
                            </div>
                            <div className="details">
                                <h1>Lorem ipsum dolor</h1>
                                <h4>$990.00</h4>
                                <div className="entry">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <div className="tabs">
                                        <div className="nav">
                                            <ul>
                                                <li className="active"><a href="#desc">Description</a></li>
                                                <li><a href="#spec">Specification</a></li>
                                                <li><a href="#ret">Returns</a></li>
                                            </ul>
                                        </div>
                                        <div className="tab-content active" id="desc">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt.</p>
                                        </div>
                                        <div className="tab-content" id="spec">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt.</p>
                                        </div>
                                        <div className="tab-content" id="ret">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div className="actions">
                                    <label>Quantity:</label>
                                    <select>
                                        <option>1</option>
                                    </select>
                                    <a href="#" className="btn-grey">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}