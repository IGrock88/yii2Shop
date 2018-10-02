import React from 'react';

export default class Aside extends React.Component{
    render() {
        return (
            <aside id="sidebar">
                <div className="widget">
                    <h3>Products per page:</h3>
                    <fieldset>
                        <input checked type="checkbox"/>
                        <label>8</label>
                        <input type="checkbox"/>
                        <label>16</label>
                        <input type="checkbox"/>
                        <label>32</label>
                    </fieldset>
                </div>
                <div className="widget">
                    <h3>Sort by:</h3>
                    <fieldset>
                        <input checked type="checkbox"/>
                        <label>Popularity</label>
                        <input type="checkbox"/>
                        <label>Date</label>
                        <input type="checkbox"/>
                        <label>Price</label>
                    </fieldset>
                </div>
                <div className="widget">
                    <h3>Condition:</h3>
                    <fieldset>
                        <input checked type="checkbox"/>
                        <label>New</label>
                        <input type="checkbox"/>
                        <label>Used</label>
                    </fieldset>
                </div>
                <div className="widget">
                    <h3>Price range:</h3>
                    <fieldset>
                        <div id="price-range"></div>
                    </fieldset>
                </div>
            </aside>
        );
    }
}