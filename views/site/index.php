<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ejercicios!</h1>

        <p class="lead">Test</p>

        <p><a class="btn btn-lg btn-success" href="#">Programación</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div>
                <h2>1.­ Escriba una función/método que determine la cantidad de 0’s a la derecha de n! (factorial) </h2>

               <p>PHP</p>

                <pre><code>   
                    /* BC FACTORIAL
                    * n! = n * (n-1) * (n-2) .. 1 [eg. 5! = 5 * 4 * 3 * 2 * 1 = 120]
                    */
                    function bcfact($n){
                        $factorial=$n;
                        while (--$n>1) $factorial=bcmul($factorial,$n);
                        return $factorial;
                    }
                    print bcfact(7); 
                    print "<br/>"; 
                    print bcfact(70); 
                </pre></code>

                 <p><code>
                     <?php
                        /* BC FACTORIAL
                        * n! = n * (n-1) * (n-2) .. 1 [eg. 5! = 5 * 4 * 3 * 2 * 1 = 120]
                        */
                      /*  function bcfact($n){
                            $factorial=$n;
                            while (--$n>1) $factorial=bcmul($factorial,$n);
                            return $factorial;
                        }
                        print bcfact(5); 
                        print "<br/>"; 
                        print bcfact(50); */
                    ?>  
            </code></p>

            <p>RUBY</p>

                   <pre><code>   
                   def zeros(num)
  char_array = num.to_s.split('')
  count = 0

  while char_array.pop == "0"
    count += 1
  end

  count
end

def factorial(num)
  num = num.to_i
  num_range = (num).downto(1).to_a
  factorial = num_range.inject(:*)
  cant=zeros(num)
  puts "El factorial de #{num} es #{factorial} y la cantidad de ceros es #{cant}"
  puts cant2=zeros(factorial)
end
puts factorial(20) 
                </pre></code>

                 


            <p><a class="btn btn-default" href="https://gist.github.com/gairga/499f35bd916307e3abcbb246969b6adf">GitHub &raquo;
            </a></p>

<br/>
             <h2>2.­ Escriba una función/método que dado un número entero, entregue su representación en palabras, Ej. 145 ­> “ciento cuarenta y cinco”</h2>

    <p>RUBY</p>

                   <pre><code>   

    def palabras(n)

    palabras_hash = {0=>"cero",1=>"Uno",2=>"Dos",3=>"Tres",4=>"Cuatro",5=>"Cinco",6=>"Seis",7=>"Siete",8=>"Ocho",9=>"Nueve",
                    10=>"Diez",11=>"eleven",12=>"twelve",13=>"Trece",14=>"fourteen",15=>"Quince",16=>"Desisies",
                     17=>"seventeen", 18=>"eighteen",19=>"Diecinueve",
                    20=>"twenty",30=>"Treinta",40=>"Cuarenta",50=>"Cincuenta",60=>"Sesenta",70=>"Setenta",80=>"Ochenta",90=>"ninety"}

     scale = [000=>"",1000=>"Mil",1000000=>" Millon",1000000000=>"Billon",1000000000000=>" Trillon", 1000000000000000=>" quadrillion"]


    if palabras_hash.has_key?(n) 
      palabras_hash[n]

      
     elsif n>= 1000  
     print  n.to_s.scan(/.{1,3}/) do |number|
            print number
      end

    elsif n <= 99
       return [palabras_hash[n - n%10],palabras_hash[n%10]].join(" ")
    else
      palabras_hash.merge!({ 100=>"Ciento" })
      ([(n%100 < 20 ? n%100 : n.to_s[2].to_i), n.to_s[1].to_i*10, 100, n.to_s[0].to_i]-[0]-[10])
        .reverse.map { |num| palabras_hash[num] }.join(" ")
    end
  end
end

#test code
test = Numberswords.new
 print test.palabras(110)
                </pre></code>
    <p><a class="btn btn-default" href="https://gist.github.com/gairga/4f777d07375fc0fdd51c5db865dec83f">GitHub &raquo;
            </a></p>
            </div>
       
           
        </div>

    </div>
</div>
