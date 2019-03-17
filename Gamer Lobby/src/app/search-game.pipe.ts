import { Pipe, PipeTransform } from '@angular/core';
@Pipe({
  name: 'gameFilter'

})
export class SearchPipe2 implements PipeTransform {

  transform(value: any, args?: any): any {
    if (!args) {
      return value;
    }
    return value.filter((val) => {
      let rVal = (val.title.toLocaleLowerCase().includes(args) || (val.title.toLocaleUpperCase().includes(args)));
      return rVal;
    })

  }

}