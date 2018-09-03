import {ModuleWithProviders} from "@angular/core";
import {RouterModule, Routes} from '@angular/router';

import {ProductDetailComponent} from "./product-detail/product-detail.component";

const routes: Routes = [
  {path: 'details', component: ProductDetailComponent}
];

export const appRoutingModule: ModuleWithProviders = RouterModule.forRoot(routes);

