# fiap-welcome-to-cloud-fase-2


## Proposta:
Seu time de Tratamento de Incidentes identificou a origem dos vazamentos de dados por meio de alguns logs do webserver da FIAP Invest, fornecendo-lhes os dois arquivos que foram acessados no horário do incidente:

[Arquivo A](index.php)

[Arquivo B](login.php)
 
Até o momento, sabe-se que os atacantes conseguiram obter acesso a um arquivo que continha diversos dados de clientes, o qual estava disponível em: `</home/dev/clientes/clientes_bkp.txt>`, no servidor de produção.

Sua tarefa será realizar a análise desses códigos utilizando alguma das ferramentas SAST apresentadas pelo projeto OWASP (<https://owasp.org/www-community/Source_Code_Analysis_Tools>), com o intuito de responder aos seguintes questionamentos:

Quais as vulnerabilidades encontradas nos arquivos? Cite o CWE da(s) vulnerabilidade(s) e a ferramenta que foi utilizada na análise.
Qual desta(s) vulnerabilidade(s) teria(m) sido utilizada(s) para se obter acesso ao arquivo clientes_bkp.txt ?
Cite um exemplo de sintaxe que poderia ter sido utilizada ao manipular o parâmetro vulnerável para realizar o referido ataque.
 

Descreva as respostas para os questionamentos acima em um relatório detalhado, com prints e suas respectivas explicações.


## INFORMAÇÕES IMPORTANTES

MODALIDADE: a atividade deve ser feita em grupos de um até cinco integrantes.

FORMATO A SER ENTREGUE: arquivo no formato .PDF, gerado a partir de um Microsoft Word ou processador de texto similar contendo os screenshots que evidenciam o cumprimento de CADA TÓPICO do enunciado. O prompt de comando (caso haja) deve exibir como hostname o seu RM, ou o RM de qualquer integrante do seu grupo. Será aceito o RM digitado no mesmo prompt após a saída do comando, ao invés de colocá-lo no hostname.

A entrega deve ser feita sempre pela plataforma FIAP ON por um dos integrantes, na página correspondente à atividade em questão. O grupo deve ser formado e formalizado previamente.

 

CRITÉRIOS DE AVALIAÇÃO

CUMPRIMENTO DE PRAZO: o artigo deve estar publicado antes do término do prazo desta atividade.

COMPLETUDE DAS INFORMAÇÕES: não evidenciar os requisitos solicitados acarretará em redução dos pontos obtidos, cujo impacto será sentido nas duas disciplinas envolvidas, de forma proporcional. Sendo assim, cubra todos os requisitos solicitados no enunciado da melhor maneira que puder!

PADRÃO DE ENTREGA: solicitamos um arquivo em PDF, assim, não entregue nada fora do padrão, pois isso pode atrapalhar na correção e acarretará em atraso do seu feedback. Screenshots que não contenham seu RM ou de alguém do seu grupo (formato RM12345) como hostname, ou digitado no mesmo prompt, serão desconsiderados como evidência de entrega.

ENTREGAS COM ATRASO: a nota máxima da atividade divulgada acima é válida apenas para entregas realizadas dentro do prazo, ou seja, até a data limite (atente-se a ela na página da atividade). Os alunos podem entregar a atividade com atraso de até 72 horas corridas depois da data limite e, nesse caso, terão direito a apenas 70% da nota máxima. Atividades entregues fora destes prazos não serão recebidas.
