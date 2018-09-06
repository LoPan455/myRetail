import { Component, OnInit } from '@angular/core';
import { ProductDataService } from '../product-data.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-product-detail',
  templateUrl: './product-detail.component.html',
  styleUrls: ['./product-detail.component.scss']
})
export class ProductDetailComponent implements OnInit {

  products$: Object;

  constructor(private data: ProductDataService) { }

  ngOnInit() {
    this.data.getProducts().subscribe(
      data => this.products$ = data
    );
  }

}
