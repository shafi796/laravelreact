import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import { render } from 'react-dom';
import { Router, Route, browserHistory } from 'react-router';


import Master from './Master';
import CreateProduct from './CreateProduct';
import DisplayProduct from './DisplayProduct';
import UpdateProduct from './UpdateProduct';

export default class Example extends Component {
    render() {
        return (
            <Router history={browserHistory}>
                <Route path="/" component={Master} >
                    <Route path="/add-item" component={CreateProduct} />
                    <Route path="/display-item" component={DisplayProduct} />
                    <Route path="/edit/:id" component={UpdateProduct} />
                </Route>
            </Router>
        );
    }
}


if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
