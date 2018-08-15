import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';
import {RouterModule} from '@angular/router';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
import {FormsModule} from '@angular/forms';

import {AppComponent} from './app.component';
import {ContactoComponent} from './modules/contacto/contacto.component';
import {NosotrosComponent} from './modules/nosotros/nosotros.component';
import {HomeComponent} from './modules/home/home.component';
import {ModelModule} from './model/model.module';

@NgModule({
    declarations: [
        AppComponent,
        NosotrosComponent,
        ContactoComponent,
        HomeComponent
    ],
    imports: [
        BrowserModule,
        FormsModule,
        ModelModule,
        RouterModule.forRoot([
            {path: "home", component: HomeComponent},
            {path: "nosotros", component: NosotrosComponent},
            {path: "contacto", component: ContactoComponent},
            {path: "**", redirectTo: "/home"}
        ]),
        NgbModule.forRoot()
    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule {}
