import { Pipe, PipeTransform } from '@angular/core';
@Pipe({
  name: 'playerFilter'

})
export class SearchPipe implements PipeTransform {

  transform(value: any, args?: any): any {
    if (!args) {
      return value;
    }
    return value.filter((val) => {
      let rVal = (val.name.toLocaleLowerCase().includes(args) || (val.name.toLocaleUpperCase().includes(args)));
      return rVal;
    })

  }

}