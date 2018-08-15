import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';

import {DataSource} from './datasource';
import {Repository} from './repo';

@NgModule({
  imports: [HttpModule],
  declarations: [],
    providers: [DataSource, Repository]
})
export class ModelModule { }
