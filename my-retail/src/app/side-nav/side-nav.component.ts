import {Component, OnInit} from '@angular/core';
import {ProductDataService} from '../product-data.service';
import {Observable} from 'rxjs';

@Component({
  selector: 'app-side-nav',
  templateUrl: './side-nav.component.html',
  styleUrls: ['./side-nav.component.scss']
})
export class SideNavComponent implements OnInit {

  products$: Object;

  constructor(private data: ProductDataService) {
  }

  ngOnInit() {
    this.data.getProducts().subscribe(
      data => this.products$ = data
    );
  }

}
