import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
//import { HttpClient } from "@angular/common/http";

import { AppComponent } from './app.component';
import { SideNavComponent } from './side-nav/side-nav.component';
import { ProductDetailComponent } from './product-detail/product-detail.component';
import { appRoutingModule } from './app-routing.module';


@NgModule({
  declarations: [
    AppComponent,
    SideNavComponent,
    ProductDetailComponent
  ],
  imports: [
    BrowserModule,
    appRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
