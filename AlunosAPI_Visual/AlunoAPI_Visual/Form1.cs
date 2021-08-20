using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Net.Http.Headers;
using Newtonsoft.Json;
using AlunoAPI_Visual.model;

namespace AlunoAPI_Visual
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            getPessoa();
        }

        public async void getPessoa()
        {
            try
            {
                string url = txtUrl.Text.Trim();
                HttpClientHandler clientHandler = new HttpClientHandler();
                clientHandler.ServerCertificateCustomValidationCallback =
                    (sender, cert, chain, sslPolicyErrors) => { return true; };
                using (var client = new HttpClient(clientHandler))
                {
                    client.DefaultRequestHeaders.Accept
                        .Add(new MediaTypeWithQualityHeaderValue("application/json"));
                    HttpResponseMessage result = client.GetAsync(url).Result; //GET
                    int status = (int)result.StatusCode;
                    if(status == 200)
                    {
                        var retornoJson =
                            result.Content.ReadAsStringAsync().Result;
                        dataGrid.DataSource =
                            JsonConvert.DeserializeObject<List<Pessoa>>
                                (retornoJson).ToList();
                    }
                    else
                    {
                        MessageBox.Show("Erro na requisição: " + status);
                    }
                }

            }
            catch (Exception ex)
            {
                MessageBox.Show("Deu erro! " + ex.Message);
            }
        }

        public async void getPessoa(int idpessoas)
        {
            try
            {
                string url = txtUrl.Text.Trim();
                HttpClientHandler clientHandler = new HttpClientHandler();
                clientHandler.ServerCertificateCustomValidationCallback =
                    (sender, cert, chain, sslPolicyErrors) => { return true; };
                using (var client = new HttpClient(clientHandler))
                {
                    client.DefaultRequestHeaders.Accept
                        .Add(new MediaTypeWithQualityHeaderValue("application/json"));
                    HttpResponseMessage result = client.GetAsync(url + "/" + idpessoas).Result; //GET
                    int status = (int)result.StatusCode;
                    if (status == 200)
                    {
                        var retornoJson =
                            result.Content.ReadAsStringAsync().Result;
                        BindingSource bs = new BindingSource();
                        bs.DataSource = JsonConvert
                            .DeserializeObject<Pessoa>(retornoJson);
                        dataGrid.DataSource = bs;
                    }
                    else
                    {
                        MessageBox.Show("Erro na requisição: " + status);
                    }
                }

            }
            catch (Exception ex)
            {
                MessageBox.Show("Deu erro! " + ex.Message);
            }
        }

        public async void newPessoa(Pessoa pessoa)
        {
            try
            {
                string url = txtUrl.Text;
                HttpClientHandler clientHandler = new HttpClientHandler();
                clientHandler.ServerCertificateCustomValidationCallback = (sender, cert, chain, sslPolicyErrors) => { return true; };

                using (var client = new HttpClient(clientHandler))
                {
                    var serializedPessoa = JsonConvert.SerializeObject(pessoa);
                    var content = new StringContent(serializedPessoa, Encoding.UTF8, "application/json");
                    var result = await client.PostAsync(url, content);
                    int status = (int)result.StatusCode;
                    if (status == 201)
                    {
                        MessageBox.Show("Dados gravados com sucesso!");
                        getPessoa();
                    }
                    else
                    {
                        MessageBox.Show("Erro ao inserir novo aluno: " + status);
                    }
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao cadastrar nova pessoa: " + ex.Message);
            }
        }

        public async void updatePessoa(Pessoa pessoa)
        {
            try
            {
                string url = txtUrl.Text;
                HttpClientHandler clientHandler = new HttpClientHandler();
                clientHandler.ServerCertificateCustomValidationCallback = (sender, cert, chain, sslPolicyErrors) => { return true; };

                using (var client = new HttpClient(clientHandler))
                {
                    var result = await client.PutAsJsonAsync(url, pessoa);
                    int status = (int)result.StatusCode;
                    if (status == 204)
                    {
                        MessageBox.Show("Dados gravados com sucesso!");
                        getPessoa();
                    }
                    else
                    {
                        MessageBox.Show("Erro ao atualizar: " + status);
                    }
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao atualizar pessoa: " + ex.Message);
            }
        }

        public async void deletePessoa(long idpessoas)
        {
            try
            {
                string url = txtUrl.Text;
                HttpClientHandler clientHandler = new HttpClientHandler();
                clientHandler.ServerCertificateCustomValidationCallback = (sender, cert, chain, sslPolicyErrors) => { return true; };

                using (var client = new HttpClient(clientHandler))
                {
                    var result = await client.DeleteAsync(url + "/" + idpessoas);
                    int status = (int)result.StatusCode;
                    if (status == 204)
                    {
                        MessageBox.Show("Dados excluídos com sucesso!");
                        getPessoa();
                    }
                    else
                    {
                        MessageBox.Show("Erro ao atualizar: " + status);
                    }
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao atualizar aluno: " + ex.Message);
            }
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            txtUrl.Text = "https://localhost:5001/api/Pessoa";
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if(txtCodigo.Text.Length != 0)
            {
                int idpessoas = int.Parse(txtCodigo.Text);
                getPessoa(idpessoas);
            }
            else
            {
                MessageBox.Show("Código em branco.");
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Pessoa pessoa = new Pessoa();
            pessoa.idpessoas = 0;
            pessoa.nome = "Nome do VS";
            pessoa.idade = 22;
            pessoa.cpf = "777.777.777-77";
            newPessoa(pessoa);
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Pessoa pessoa = new Pessoa();
            pessoa.idpessoas = 6;
            pessoa.nome = "Nome VS Bin";
            pessoa.idade = 40;
            pessoa.cpf = "777.888.777-88";
            updatePessoa(pessoa);
        }

        private void button5_Click(object sender, EventArgs e)
        {
            if (txtCodigo.Text.Length != 0)
            {
                int idpessoas = int.Parse(txtCodigo.Text);
                deletePessoa(idpessoas);
            }
            else
            {
                MessageBox.Show("Código em branco.");
            }
        }
    }
}
