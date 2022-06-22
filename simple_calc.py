
def calc_assembly(x,y,symbol):
    if symbol == '+':
        return x+y
    elif symbol == '-':
        return x-y
    elif symbol == '*':
        return x*y
    elif symbol == '/':
        return x/y
    elif symbol == '**':
        return x**y
    else:
        print('данный тип не реализован')

def test_calc_assembly():
    if calc_assembly(1, 2, '-') == -1:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '+') == 3:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '/') == 0.5:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '*') == 2:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '**') == 1:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '-') == 12:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '+') == 12:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '/') == 12:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '*') == 12:
        print ('pass')
    else: print ('faild')
    if calc_assembly(1, 2, '**') == 12:
        print ('pass')
    else: print ('faild')

test_calc_assembly()