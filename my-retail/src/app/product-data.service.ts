import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';


@Injectable({
  providedIn: 'root'
})
export class ProductDataService {

  constructor(private http: HttpClient) { }

  getProducts() {
    return this.http.get('http://localhost:4000/products');
  }
}
