# GLPI Brandkit Plugin (Fork para GLPI 12)

<p align="center">
  <img src="Plugin.png" alt="Brandkit Logo" width="140">
</p>

<p align="center">
  <a href="https://glpi-project.org/"><img src="https://img.shields.io/badge/GLPI-v12-blue.svg" alt="GLPI Version"></a>
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-AGPL%20v3-blue.svg" alt="License: AGPL v3"></a>
</p>

Este repositório é um **fork** do plugin **Brandkit** para GLPI, atualizado e adaptado para adequação e compatibilidade plena com o **GLPI 12**.

---

## Sobre o Fork

O plugin Brandkit permite personalizar a identidade visual do GLPI (logotipos da aplicação e página de login) com facilidade. Com a evolução da arquitetura do GLPI na versão 12, foram realizadas adequações nos hooks, caminhos de assets e compatibilidade geral com a nova versão.

### Principais alterações neste fork:
- **Compatibilidade com GLPI 12**: Adequação das checagens de versão e pré-requisitos (`setup.php`).
- **Ajustes de Hooks e Interface**: Adaptação no carregamento de estilos, scripts e menus para o GLPI 12.
- **Correções de compatibilidade PHP/GLPI**: Garantia de funcionamento estável nas versões modernas de PHP e GLPI.

---

## Recursos Visuais e Demonstração

### Identidade Visual e Temas
Suporte a logotipos personalizados adaptáveis tanto para a interface clara quanto para o modo escuro:

<p align="center">
  <img src="pics/brandkit.png" width="180" alt="Logo Brandkit Claro">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="pics/brandkit-dark.png" width="180" alt="Logo Brandkit Escuro">
</p>

### Papéis de Parede para a Tela de Login
O plugin inclui opções de papéis de parede profissionais em alta definição para customizar a página de login:

| Servidores e Infraestrutura | Produtividade e TI |
| :---: | :---: |
| <img src="pics/wallpapers/storage-server-racks.png" width="380" alt="Data Center"> | <img src="pics/wallpapers/man-working-his-laptop.png" width="380" alt="Produtividade"> |

| Visão de Escritório Corporativo | Suporte ao Usuário |
| :---: | :---: |
| <img src="pics/wallpapers/top-view-of-office.png" width="380" alt="Escritório"> | <img src="pics/wallpapers/professional-woman-providing-support.png" width="380" alt="Suporte ao Usuário"> |

---

## Instalação

### 1. Clonar ou copiar os arquivos
Baixe ou clone este repositório para o diretório de plugins do seu servidor GLPI. A pasta do plugin deve se chamar obrigatoriamente `brandkit`:

```bash
cd /caminho/do/glpi/plugins
git clone https://github.com/devluciano/glpi-brandkit-fork-v.12-glpi.git brandkit
```

> **Atenção:** Certifique-se de que o diretório se chame `brandkit` (e não o nome padrão do repositório) para que o GLPI reconheça corretamente as rotas do plugin.

### 2. Permissões de arquivo
Ajuste as permissões para o usuário do seu servidor web (ex: `www-data` no Debian/Ubuntu ou `apache` no RHEL/CentOS):

```bash
chown -R www-data:www-data /caminho/do/glpi/plugins/brandkit
chmod -R 755 /caminho/do/glpi/plugins/brandkit
```

### 3. Ativar no GLPI
1. Acesse o GLPI com perfil de Administrador (`super-admin`).
2. Vá em **Configurar** > **Plugins** (ou *Setup > Plugins*).
3. Localize o plugin **Brandkit** na lista.
4. Clique em **Instalar** e, em seguida, em **Habilitar**.

### 4. Configurar a Identidade Visual
- Acesse através do menu em **Plugins** > **Brandkit** (ou **Configurar** > **Plugins**).
- Personalize os logotipos da aplicação e o visual da tela de login conforme a identidade visual da sua organização.

---

## Pré-requisitos

- **GLPI**: Versão 10.0 a 12.x
- **PHP**: PHP 7.4 ou superior (compatível com os requisitos da sua versão do GLPI)
- **Extensões PHP**: `json`, `curl`

---

## Autoria e Manutenção do Fork

Modificações e compatibilização para **GLPI 12** desenvolvidas por:
- **Luciano Silva** - *Dev FullStack*
- GitHub: [@devluciano](https://github.com/devluciano)

---

## Licença e Créditos

- Autor das alterações para GLPI 12: **Luciano Silva**
- Baseado no trabalho original do plugin **GLPI Brandkit** desenvolvido por Junior Marcati.
- Distribuído sob a licença **GNU Affero General Public License v3.0** (consulte o arquivo [LICENSE](LICENSE) para mais detalhes).
